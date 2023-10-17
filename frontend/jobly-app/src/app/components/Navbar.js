"use client";

import { Switch } from "@nextui-org/react";
import Link from "next/link";
import React from "react";
import { useState } from "react";

export default function Navbar({ callBack }) {
  return (
    <header className="fixed top-0 w-full text-gray-700 bg-white shadow-sm body-font z-50">
      <nav className="justify-between flex items-center p-6 mx-auto md:flex-row">
        <div className="flex items-center mb-4 font-medium text-gray-900 title-font md:mb-0">
          <Link href="http://localhost:3000/">
            <img className="w-auto h-12" src="/logo.svg" alt="Logo" />
          </Link>
        </div>

        <div className="h-full pl-6 ml-6 border-l border-gray-200">
          <a href="#_" className="mr-5 font-medium hover:text-gray-900">
            Login
          </a>
          <Switch onClick={() => callBack()} />
        </div>
      </nav>
    </header>
  );
}
