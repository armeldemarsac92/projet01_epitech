import { useEffect, useState } from "react";

function SearchResults(query) {
  const searchResults = query;
  return (
    <ul>
      {searchResults.map((result) => (
        <li key={result.id}>
          {/* Display your search result data here */}
          <p>Name: {result.enterprise}</p>
          <p>Description: {result.about}</p>
          {/* Add more properties as needed */}
        </li>
      ))}
    </ul>
  );
}

export default SearchResults;
