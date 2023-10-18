"use client";
import Navbar from "../components/Navbar";
import "../styles/global.css";
import { useState } from "react";

export default function AdminSignIn() {
  return (
    <main className="bg-admin">
      <div className="flex justify-center min-h-screen">
        <div className="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5 ">
          <div className="w-full backdrop-blur-sm bg-white/20 p-10 rounded-md">
            <div className="mt-6">
              <h1 className="text-white">Admin sign in</h1>

              <div className="mt-3 md:flex md:items-center md:-mx-2"></div>
            </div>

            <form className="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2">
              <div>
                <label className="text-white  block mb-2 text-sm">
                  Email address
                </label>
                <input
                  type="email"
                  placeholder="johnsnow@example.com"
                  className="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                />
              </div>

              <div>
                <label className="text-white block mb-2 text-sm">
                  Password
                </label>
                <input
                  type="password"
                  placeholder="Enter your password"
                  className="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                />
              </div>

              <button className="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide capitalize transition-colors duration-300 transform rounded-md bg-white text-indigo-950 hover:bg-slate-200 focus:outline-none focus:ring focus:ring-white focus:ring-opacity-50">
                <span>Log in </span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </main>
  );
}
