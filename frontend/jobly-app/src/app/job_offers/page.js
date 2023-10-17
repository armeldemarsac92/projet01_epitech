"use client";
import { Search } from "../components/Search";
import "../styles/global.css";
import { useState } from "react";
import React from "react";
import { useRouter } from "next/navigation";
import SearchResults from "../components/SearchResult";

export default function job_Offers() {
  const router = useRouter();
  const { searchResults } = router.query;

  return (
    <main>
      <div className="h-screen flex flex-col">
        <div className="flex bg-gradient-candidate h-2/3 z-0 items-center justify-center">
          <div className="relative w-2/4">
            <Search></Search>
          </div>
        </div>
        <div className="bg-gray-300 h-1/3 z-10 flex items-center justify-center">
          <div className="bg-white absolute -mt-40 min-h-70 h-2/5 w-3/4 z-20 rounded-lg">
            <div>
              <h2>Résultats de la recherche :</h2>
              <SearchResults query={searchResults} />
            </div>
          </div>
        </div>
      </div>
    </main>
  );
}
