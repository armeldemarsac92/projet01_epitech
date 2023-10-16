"use client";

import { Switch } from "@nextui-org/react";
import Link from "next/link";
import React from "react";
import { useState } from "react";

export default function Navbar() {
  const handleToggleMode = () => {
    if (mode === "candidate") {
      setMode("recruiter");
    } else {
      setMode("candidate");
    }
  };
  return (
    <header className="w-full text-gray-700 bg-white shadow-sm body-font">
      <nav className="justify-between flex flex-col items-center p-6 mx-auto md:flex-row">
        <a className="flex items-center mb-4 font-medium text-gray-900 title-font md:mb-0">
          <img className="w-auto h-12" src="/logo.svg" alt="Logo" />
        </a>

        <div className="h-full pl-6 ml-6 border-l border-gray-200">
          <a href="#_" className="mr-5 font-medium hover:text-gray-900">
            Login
          </a>
          <Switch isOn={mode === "candidate"} handleToggle={handleToggleMode} />
        </div>
      </nav>
    </header>
  );
}
