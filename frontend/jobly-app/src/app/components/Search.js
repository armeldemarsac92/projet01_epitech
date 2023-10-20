import Axios from "axios";
import { useRouter } from "next/navigation";
import React, { useState, useContext } from "react";
import { SearchContext } from "../context/SearchContext";

export const Search = () => {
  const [searchValue, setSearchValue] = useState("");
  const { setSearchResults } = useContext(SearchContext); // Access the context
  const router = useRouter();

  const handleSearchClick = () => {
    console.log("Searching for:", searchValue);

    const baseUrl = "http://localhost:8000/api/job_offers/";

    const queryParams = {
      searchTerm: searchValue,
      maxResults: 10,
    };

    Axios.get(baseUrl, { params: queryParams })
      .then((response) => {
        console.log("Search results:", response.data);

        // Set the searchResults in the shared state
        setSearchResults(response.data);

        // Navigate to the target page
        router.push("/job_offers");
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  };

  return (
    <div className="flex flex-col items-center h-full w-full p-6">
      <div className="pt-2 relative mx-auto text-gray-600 w-1/2">
        <input
          className="border-2 border-gray-300 bg-white h-10 px-5 rounded-full w-full text-sm focus:outline-none"
          type="search"
          name="search"
          placeholder="Search"
          id="searchField"
          value={searchValue}
          onChange={(e) => setSearchValue(e.target.value)}
        />
        {/* SVG Magnifying Glass Image */}
        <button onClick={handleSearchClick}>
          <img
            src="/loupe.svg"
            alt="Search"
            className="absolute right-0 top-0 mt-5 mr-4 h-4 w-4 text-gray-600"
          />
        </button>
      </div>
    </div>
  );
};

export default Search;
