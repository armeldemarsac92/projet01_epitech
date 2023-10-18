// context/SearchContext.js
"use client"
import React, { createContext, useContext, useState } from "react";

// Create a new context
export const SearchContext = createContext();

// Create a provider component
export const SearchProvider = ({ children }) => {
  const [searchResults, setSearchResults] = useState([]);

  return (
    <SearchContext.Provider value={{ searchResults, setSearchResults }}>
      {children}
    </SearchContext.Provider>
  );
};
