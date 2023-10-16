'use client'
import React from 'react';

const Search = () => {
    return (
        <div className="flex flex-col items-center h-full w-full p-6">
            <div className="pt-2 relative mx-auto text-gray-600 w-1/2">
                <input
                    className="border-2 border-gray-300 bg-white h-10 px-5 rounded-full w-full text-sm focus:outline-none"
                    type="search"
                    name="search"
                    placeholder="Search"
                />
                {/* SVG Magnifying Glass Image */}
                <img
                    src='/loupe.svg'
                    alt="Search"
                    className="absolute right-0 top-0 mt-5 mr-4 h-4 w-4 text-gray-600"
                />
            </div>
        </div>
    );
};

export default Search;
