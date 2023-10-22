import React, { useState, useContext } from "react";
import Cookies from "js-cookie";
import { SearchContext } from "../context/SearchContext";
import axios from "axios";

function SearchResults({ searchResults }) {

  const { userData, updateUserApplications, updateJobOfferApplications, updateJobOfferFavorites, updateUserFavorites } = useContext(SearchContext);
  const applications = userData?.application;
  const favorites = userData?.favorite;
  console.log(favorites)

  function DetailsButton({ setIsOpen, isOpen, id }) {
    return (
      <button onClick={() => setIsOpen(isOpen ? null : id)} className="text-indigo-600 hover:underline">
        {isOpen ? "See Less" : "See More"}
      </button>
    );
  }

  const applyToJobOffer = (offerId) => {
    const baseUrl = `https://localhost:8000/api/candidate/apply`;
    console.log(offerId)
            
            axios({
                method: 'post',
                url: baseUrl,
                data: {'offer_id' : offerId},
                headers: {
                    'Authorization': `Bearer ${Cookies.get('token')}`,
                    'Content-Type': 'application/json',
                } 
            })
            .then((response) => {
              const updatedApplications = response.data.candidate_applications;
              const updatedOfferApplications = response.data.offer_applications;
              const offer_id = response.data.offer_id;
              updateUserApplications(updatedApplications);
              updateJobOfferApplications(updatedOfferApplications, offer_id);

            })

  }

  const likeJobOffer = (offerId) => {
    const baseUrl = `https://localhost:8000/api/candidate/like`;
    console.log(offerId)
            
            axios({
                method: 'post',
                url: baseUrl,
                data: {'offer_id' : offerId},
                headers: {
                    'Authorization': `Bearer ${Cookies.get('token')}`,
                    'Content-Type': 'application/json',
                } 
            })
            .then((response) => {
              const updatedFavorites = response.data.candidate_likes;
              const updatedOfferFavorites = response.data.offer_favorites;
              const offer_id = response.data.offer_id;
              updateUserFavorites(updatedFavorites);
              updateJobOfferFavorites(updatedOfferFavorites, offer_id);

            })

  }
  
  function ExpandedDetails({ result }) {
    return (
      <div className="mt-4 border-1 border-indigo-200 rounded-lg p-5 mb-4">
        <p className="text-m text-indigo-500 pb-2 text-transform: uppercase">Required tools:</p>
        <div className="flex flex-row flex-wrap pb-5 pt-0">
          {result.tools.map((tool, index) => (
            <span key={index} className="text-sm text-transform: uppercase text-indigo-600 border-1 border-indigo-300 pr-4 pl-4 p-2 mb-2 mr-2 font-medium rounded-lg">
              {tool}
            </span>
          ))}
        </div>
        <p className="text-m text-indigo-500 pb-2 text-transform: uppercase">Required competences:</p>
        <div className="flex flex-row flex-wrap pb-5 pt-0">
          {result.competences.map((tool, index) => (
            <span key={index} className="text-sm text-transform: uppercase text-indigo-600 border-1 border-indigo-300 pr-4 pl-4 p-2 mb-2 mr-2 font-medium rounded-lg">
              {tool}
            </span>
          ))}
        </div>
      </div>
    );
  }

  const [openCard, setOpenCard] = useState(null);

  return (
    <ul className="space-y-4 w-full pt-10 pb-10">
      {searchResults.map((result) => (
        <li key={result.id} className="bg-white drop-shadow rounded-lg overflow-hidden w-full p-5 transition-transform hover:scale-[1.01] duration-300">
          <div className="flex justify-between items-start p-4">
            <div className="flex flex-col w-3/4">
              {/* Display your search result data here */}
              <p className="text-indigo-900 text-transform: uppercase">{result.enterprise}</p>
              <h3 className="font-bold text-3xl mb-2 text-indigo-950">{result.title}</h3>
              <p className="text-xl text-gray-500">{result.about}</p>
              <div className="flex flex-row pb-5 pt-5">
                <p className="text-sm text-transform: uppercase text-indigo-600 border-1 border-indigo-300 pr-4 pl-4 p-2 mr-2 font-medium rounded-lg">{result.contract}</p>
                <p className="text-sm text-transform: uppercase text-indigo-600 border-1 border-indigo-300 pr-4 pl-4 p-2 mr-2 font-medium rounded-lg">{result.contract_length}</p>
                <p className="text-sm text-transform: uppercase text-indigo-600 border-1 border-indigo-300 pr-4 pl-4 p-2 mr-2 font-medium rounded-lg">{result.localisation}</p>
              </div>
              <div className="flex flex-row items-center">
                <p className="text-sm text-transform: uppercase bg-indigo-500 border-1 text-white pr-4 pl-4 p-2 mr-2 font-medium rounded-lg">{`${result.salary}K$ a year`}</p>
                <p className="text-xs text-gray-500 pl-1">{new Date(result.published_on).toLocaleDateString('en-GB')}</p>
              </div>
              {openCard === result.id && <ExpandedDetails result={result} />}
            </div>
            <div className="flex h-52 w-28 flex-col items-start justify-between">
              <div className="flex h-1/2 w-full flex-col items-end">
                  <DetailsButton setIsOpen={setOpenCard} isOpen={openCard === result.id} id={result.id} />
              </div>
              <div className="flex h-1/2 w-full flex-row justify-between items-end">
                  <div className="flex flex-row items-center w-fit">
                  <button 
                    className={applications?.includes(result.id) ? "flex flex-row bg-indigo-500 rounded-md p-2 w-15 cursor-default" : "flex flex-row p-2 w-15"}
                    onClick={applications?.includes(result.id) ? undefined : () => applyToJobOffer(result.id)}
                    title={applications?.includes(result.id) ? "You have already applied to this job" : "Click to apply to this job"}
                  >
                      <p className={applications?.includes(result.id)? "text-sm text-white pr-2" : "text-sm text-indigo-600 pr-2"}>{result.application}</p>
                      <img className="w-auto h-5" src={applications?.includes(result.id)? "/applied_active.svg":"applied.svg"}></img>
                    </button>
                  </div>
                  <div className="flex flex-row items-center w-fit">
                  <button 
                    className={favorites?.includes(result.id) ? "flex flex-row bg-indigo-500 rounded-md p-2 w-15" : "flex flex-row p-2 w-15"}
                    onClick={favorites?.includes(result.id) ? () => likeJobOffer(result.id) : () => likeJobOffer(result.id)}
                    title={favorites?.includes(result.id) ? "Click to unfave this job" : "Click to fave to this job"}
                  >
                      <p className={favorites?.includes(result.id)? "text-sm text-white pr-2" : "text-sm text-indigo-600 pr-2"}>{result.favorite}</p>
                      <img className="w-auto h-5" src={favorites?.includes(result.id)? "/faved_active.svg":"faved.svg"}></img>
                    </button>
                  </div>
              </div>
            </div>


          </div>
        </li>
      ))}
    </ul>
  );
}



export default SearchResults;
