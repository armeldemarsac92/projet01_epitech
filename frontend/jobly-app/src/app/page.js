"use client";
import Footer from "./components/Footer";
import Search from "./components/Search";
import Navbar from "./components/Navbar";
import "./styles/global.css";
import { useState } from "react";

export default function Home() {
  let [userStyles, setUserStyles] = useState(true);

  function toggleUserStyle() {
    setUserStyles(!userStyles);
  }

  return (
    <main
      className={userStyles ? "bg-gradient-candidate" : "bg-gradient-recruiter"}
    >
      <Navbar callBack={toggleUserStyle} />
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
          <div className="flex flex-col h-1/3"></div>
        </div>
      </div>
    </main>
  );
}
