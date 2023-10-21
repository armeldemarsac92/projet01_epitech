"use client"
import React, { useContext } from "react";
import CustomSwitch from "./Switch";
import Link from "next/link";
import { decryptData } from "../utils/crypto";
import Cookies from "js-cookie";
import { SearchContext } from "../context/SearchContext";  // Step 1: Import the Context

export default function Navbar() {

  const { mode, toggleMode, userData } = useContext(SearchContext);

  const deleteCookies = () => {
    localStorage.removeItem('user_data')
    Cookies.remove('token');
    window.location.reload();
    // Optionally, you might want to redirect the user to a login page or take other actions here
  };
  
  return (
      <header className="fixed top-0 w-full text-gray-700 bg-white shadow-sm body-font z-50">
          <nav className="justify-between flex flex-col items-center p-6 mx-auto md:flex-row">
                <Link href={"/"}>
                <img className="w-auto h-12" src="/logo.svg" alt="Logo" />
                </Link>

                { userData === null? (
                <div className="h-full pl-6 ml-6 border-l border-gray-200 flex flex-row items-center">
                  <Link className="mr-5 font-medium hover:text-gray-900" href={"/login"}>
                    Login
                  </Link>
                  <CustomSwitch onToggle={toggleMode} isChecked={mode === "enterprise"} />
                </div>
                ) : (
                  <button onClick={deleteCookies} >
                    <div className="h-full pl-6 ml-6 border-l border-gray-200 flex flex-row items-center">
                  <p  className="mr-5 font-medium hover:text-gray-900">Logout</p> 
                </div>
                  </button>)}
                
          </nav>
      </header>
  );
}
