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

  return (
    <SearchContext.Provider value={{ searchResults, setSearchResults, mode, setMode, toggleMode, userData}}>
      {children}
    </SearchContext.Provider>
  );
};
