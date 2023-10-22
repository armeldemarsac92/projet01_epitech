import React, { useState } from "react";

function ProfessionnalExperience({ searchResults }) {

  return (
    <ul className="space-y-4 w-full pt-10 pb-10">
      {searchResults.map((info) => (
        <li
          key={info.id}
          className="bg-white drop-shadow rounded-lg overflow-hidden w-full p-5 transition-transform hover:scale-[1.01] duration-300"
        >
          <div className="flex justify-between items-start p-4">
            <div className="flex flex-col w-3/4">
              {/* Display your search result data here */}
              <p className="text-indigo-900 text-transform: uppercase">
                {info.first_name}
              </p>
              <h3 className="font-bold text-3xl mb-2 text-indigo-950">
                {info.last_name}
              </h3>
              <p className="text-xl text-gray-500">{info.sex}</p>
              <div className="flex flex-row pb-5 pt-5">
                <p className="text-sm text-transform: uppercase text-indigo-600 border-1 border-indigo-300 pr-4 pl-4 p-2 mr-2 font-medium rounded-lg">
                  {info.email}
                </p>
                <p className="text-sm text-transform: uppercase text-indigo-600 border-1 border-indigo-300 pr-4 pl-4 p-2 mr-2 font-medium rounded-lg">
                  {info.phone_number}
                </p>
                <p className="text-sm text-transform: uppercase text-indigo-600 border-1 border-indigo-300 pr-4 pl-4 p-2 mr-2 font-medium rounded-lg">
                  {info.localisation}
                </p>
                <p className="text-sm text-transform: uppercase text-indigo-600 border-1 border-indigo-300 pr-4 pl-4 p-2 mr-2 font-medium rounded-lg">
                  {info.about}
                </p>
                <p className="text-sm text-transform: uppercase text-indigo-600 border-1 border-indigo-300 pr-4 pl-4 p-2 mr-2 font-medium rounded-lg">
                  {info.profil_picture}
                </p>
                <p className="text-sm text-transform: uppercase text-indigo-600 border-1 border-indigo-300 pr-4 pl-4 p-2 mr-2 font-medium rounded-lg">
                  {info.status}
                </p>
              </div>
            </div>
          </div>
        </li>
      ))}
    </ul>
  );
}

export default ProfessionnalExperience;
