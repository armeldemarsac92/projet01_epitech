import React, { useState } from "react";

function SearchResults({ searchResults }) {

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
                  <div className="flex flex-row items-center">
                      <p className="text-sm text-indigo-600 pr-2">{result.application}</p>
                      <img className="w-auto h-5" src="/applied.svg"></img>
                  </div>
                  <div className="flex flex-row items-center">
                      <p className="text-sm text-indigo-600 pr-2">{result.favorite}</p>
                      <img className="w-auto h-5" src="/faved.svg"></img>
                  </div>
              </div>
            </div>


          </div>
        </li>
      ))}
    </ul>
  );
}

function DetailsButton({ setIsOpen, isOpen, id }) {
  return (
    <button onClick={() => setIsOpen(isOpen ? null : id)} className="text-indigo-600 hover:underline">
      {isOpen ? "See Less" : "See More"}
    </button>
  );
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

export default SearchResults;
