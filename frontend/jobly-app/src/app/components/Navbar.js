"use client";

import React from "react";
import CustomSwitch from "./Switch";
import Link from "next/link";

export default function Navbar({ onToggle, mode }) {
  return (
      <header className="fixed top-0 w-full text-gray-700 bg-white shadow-sm body-font z-50">
          <nav className="justify-between flex flex-col items-center p-6 mx-auto md:flex-row">
                <Link href={"/"}>
                <img className="w-auto h-12" src="/logo.svg" alt="Logo" />
                </Link>
              <div className="h-full pl-6 ml-6 border-l border-gray-200 flex flex-row items-center">
                  <a className="mr-5 font-medium hover:text-gray-900">
                      Login
                  </a>
                <CustomSwitch onToggle={onToggle} isChecked={mode === "recruiter"} />

              </div>
          </nav>
      </header>
  );
}
