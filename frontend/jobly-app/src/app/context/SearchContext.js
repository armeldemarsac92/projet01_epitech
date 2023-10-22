// context/SearchContext.js
"use client";
import React, { createContext, useState, useEffect } from "react";
import { decryptData } from "../utils/crypto";
import Cookies from "js-cookie";

export const SearchContext = createContext();

export const SearchProvider = ({ children }) => {
  const [searchResults, setSearchResults] = useState([]);
  const [mode, setMode] = useState("candidate");  
  const [userData, setUserData] = useState(null);

  useEffect(() => {
    const decryptedData = decryptData(localStorage.getItem('user_data'));
    setUserData(decryptedData);
    console.log(decryptedData)
  }, []);  // The empty array means this useEffect runs once, similar to componentDidMount

  const toggleMode = () => {
    setMode(prevMode => prevMode === "candidate" ? "enterprise" : "candidate");
  };

  useEffect(() => {
    if (userData?.roles?.includes('ROLE_ENTERPRISE')) {
      setMode("enterprise");
    } else {
    }
  }, [userData]);

  const updateUserApplications = (updatedApplications) => {
    setUserData(prevUserData => ({
        ...prevUserData,
        application: updatedApplications
    }));
    console.log(updatedApplications)
    console.log(userData)
  };

  const updateUserFavorites = (updatedFavorites) => {
    setUserData(prevUserData => ({
        ...prevUserData,
        favorite: updatedFavorites
    }));
    console.log(updatedFavorites)
    console.log(userData)
  };
  
  const updateJobOfferApplications = (updatedOfferApplications, offer_id) => {
    console.log(offer_id,updatedOfferApplications)
    setSearchResults(prevSearchResults => {
        return prevSearchResults.map(offer => {
            if (offer.id === offer_id) {
                return {
                    ...offer,
                    application: updatedOfferApplications
                };
            }
            return offer;
        });
    });
};


const updateJobOfferFavorites = (updatedOfferFavorites, offer_id) => {
  console.log(offer_id,updatedOfferFavorites)
  setSearchResults(prevSearchResults => {
      return prevSearchResults.map(offer => {
          if (offer.id === offer_id) {
              return {
                  ...offer,
                  favorite: updatedOfferFavorites
              };
          }
          return offer;
      });
  });
};




  return (
    <SearchContext.Provider value={{ searchResults, setSearchResults, mode, setMode, toggleMode, userData, updateUserApplications, updateJobOfferApplications, updateJobOfferFavorites, updateUserFavorites}}>
      {children}
    </SearchContext.Provider>
  );
};
