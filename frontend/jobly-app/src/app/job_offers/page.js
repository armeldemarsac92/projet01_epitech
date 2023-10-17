'use client'
import React, { useContext, useState } from "react";
import { Search } from "../components/Search";
import "../styles/global.css";
import SearchResults from "../components/SearchResult";
import { SearchContext } from '../context/SearchContext';
import Navbar from "../components/Navbar";

export default function job_Offers() {

  const [mode, setMode] = useState("candidate");

  // Access the data and functions from the SearchContext
  const { searchResults, setSearchResults } = useContext(SearchContext);

  const toggleMode = () => {
    setMode(prevMode => prevMode === "candidate" ? "recruiter" : "candidate");
}

  return (
    <main className={mode === "candidate" ? "bg-gradient-candidate" : "bg-gradient-recruiter"}>
      <Navbar onToggle={toggleMode} mode={mode} key={mode}/>
      <div className="h-[40rem] flex flex-col">
        <div className="flex bg-gradient-candidate h-full z-0 items-center justify-center">
          <div className="relative w-2/4">
            <Search></Search>
          </div>
        </div>
      </div>
      <div className="bg-gray-300 h-fit min-h-[10rem] pb-10 z-10 flex flex-start justify-center">
          <div className="flex flex-col items-left bg-white -mt-40 min-h-[20rem] h-fit p-10 pl-20 pr-20 w-3/4 z-20 rounded-lg">
              <h2 className="font-semibold text-3xl text-indigo-950">Offers</h2>
              <SearchResults searchResults={searchResults} />
            
          </div>
        </div>
    </main>
  );
}