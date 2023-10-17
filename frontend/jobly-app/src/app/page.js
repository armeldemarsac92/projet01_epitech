"use client";
import Search from "./components/Search";
import Navbar from "./components/Navbar";
import "./styles/global.css";
import { useState } from "react";

export default function Home() {
  const [mode, setMode] = useState("candidate");  // Default mode is "candidate"

  const toggleMode = () => {
      setMode(prevMode => prevMode === "candidate" ? "recruiter" : "candidate");
  }
  

  return (
    <main className={mode === "candidate" ? "bg-gradient-candidate" : "bg-gradient-recruiter"}>
      <Navbar onToggle={toggleMode} mode={mode} key={mode}/>
      <div className="flex flex-row w-full justify-center">
        <div className="flex flex-col w-1/2 h-screen">
          <div className="flex flex-col h-1/3"></div>
          <div className="flex flex-col h-1/3">
            <div className="flex flex-col h-fit flex-start items-center">
              <h1 className="font-semibold text-3xl">Find your dream job</h1>
            </div>
            <div className="flex flex-col h-2/3 items-center">
              <Search></Search>
            </div>
          </div>
          <div className="flex flex-col h-1/3 justify-end items-center ">
            <button className="border-2 border-gray-300 bg-white h-8 px-5 rounded-full w-1/5  focus:outline-none text-black font-semibold">
              Sign up
            </button>
            <h1 className="pb-5 font-semibold text-xl mt-5">
              New ? Sign up for a fresh start !
            </h1>
          </div>
        </div>
        <div></div>
      </div>
    </main>
  );
}
