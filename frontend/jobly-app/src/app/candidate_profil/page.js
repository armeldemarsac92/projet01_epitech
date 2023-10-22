"use client";
import "../styles/global.css";
import Navbar from "../components/Navbar";
import ProfessionnalExperience from "../components/ProfessionnalExperience";
import { SearchContext } from "../context/SearchContext";
import { Search } from "../components/Search";
import { useContext } from "react";

export default function candidateProfil() {
  const { professionnalExperience, mode } = useContext(SearchContext);

  return (
    <main className="w-screen h-screen">
      <div>
        <Navbar />
      </div>
      <div className="w-full h-full ">
        <div className="bg-gradient-candidate w-full h-3/5 flex flex-col justify-center">
          <div className="pt-[5rem] flex flex-col items-center">
            <img
              className="w-[12rem] rounded-full "
              src="armeltd.jpg"
              alt="description de l'image"
            ></img>
            <div className="flex flex-col items-center">
              <h1 className="pt-4 text-white font-semibold text-2xl">
                Mathieu Déhan
              </h1>
              <h1 className="bg-white rounded-lg font-semibold text-3xl px-3 mt-5">
                Developer full-stack
              </h1>
            </div>
          </div>
        </div>
        <div className="flex col w-full h-2/5 p-10 z-0">
          <div className="bg-gray-200 w-2/5 min-h-full rounded-lg mx-10 p-5 z-0">
            <div className="text-xl font-semibold pl-4 text">
              <h1>Degrees</h1>
            </div>
            <div className="text-xl font-semibold pl-4">
              <h1>Certifications</h1>
            </div>
            <div className="text-xl font-semibold pl-4">
              <h1>Languages</h1>
            </div>
          </div>
          <div className="bg-gray-200 w-2/3 min-h-full rounded-lg mx-10 p-5 z-0">
            <ProfessionnalExperience
              professionnalExperience={professionnalExperience}
            />
          </div>
        </div>
      </div>
    </main>
  );
}
