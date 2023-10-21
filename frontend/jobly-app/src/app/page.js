// Home component
"use client";
import React, { useContext } from "react";
import Search from "./components/Search";
import Navbar from "./components/Navbar";
import Link from "next/link";
import "./styles/global.css";
import { SearchContext } from "./context/SearchContext";

export default function Home() {
  const { mode, role } = useContext(SearchContext);
  

  return (
    <main className={mode === "candidate" ? "bg-gradient-candidate" : "bg-gradient-recruiter"}>
      <div className="flex flex-row w-full justify-center">
        <div className="flex flex-col w-1/2 h-screen">
          <div className="flex flex-col h-1/3"></div>
          <div className="flex flex-col h-1/3">
            <div className="flex flex-col h-fit flex-start items-center">
              <h1 className={`font-semibold text-3xl ${mode === "candidate" ? "text-white" : "text-indigo-950"}`}>Find your dream job</h1>
            </div>
            <div className="flex flex-col h-2/3 items-center">

                <Search></Search>
              
            </div>
          </div>
          <div className="flex flex-col h-1/3 justify-end items-center ">
            <Link href={"/sign_up"}>
            <button className="border-2 pr-5 pl-5 border-gray-300 bg-white h-8 px-5 rounded-full focus:outline-none text-black font-semibold">
              Sign up
            </button>
            </Link>
            <h1 className="pb-5 font-semibold text-xl text-gray-200 mt-5">
              New ? Sign up for a fresh start !
            </h1>
          </div>
        </div>
        <div></div>
      </div>
    </main>
  );
}
