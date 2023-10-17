'use client'
import Navbar from "../components/Navbar";
import "../styles/global.css";
import { useState } from "react";

export default function SignUpForm () {

    const [mode, setMode] = useState("candidate");  // Default mode is "candidate"

    const toggleMode = () => {
        setMode(prevMode => prevMode === "candidate" ? "recruiter" : "candidate");
    }
    
    const setModeToCandidate = () => {
        setMode("candidate");
    }
    
    const setModeToRecruiter = () => {
        setMode("recruiter");
    }
    
    
    
    
    
    return (
        
        <main className={mode === "candidate" ? "bg-gradient-candidate" : "bg-gradient-recruiter"}>
            <Navbar onToggle={toggleMode} mode={mode} key={mode}/>
            <div className="flex justify-center min-h-screen">
                <div style={{ backgroundImage: "url('/open_space.png')" }} className="hidden bg-cover lg:block lg:w-2/5">
                </div>

                <div className="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5 ">
                    <div className="w-full backdrop-blur-sm bg-white/20 p-10 rounded-md">
                        <h1 className={mode === "candidate" ? "text-2xl font-semibold tracking-wider capitalize text-white" : "text-2xl font-semibold tracking-wider capitalize text-indigo-950"}>
                            Create your account now.
                        </h1>

                        <p className={mode === "candidate" ? "mt-4 text-white" : "mt-4 text-indigo-950"}>
                            Let’s get you all set up so you can verify your personal account and begin setting up your profile.
                        </p>

                        <div className="mt-6">
                            <h1 className={mode === "candidate" ? "text-white" : "text-indigo-950"}>Select type of account</h1>

                            <div className="mt-3 md:flex md:items-center md:-mx-2">
                                <button className={`flex justify-center w-full px-6 py-3 rounded-md md:w-auto md:mx-2 focus:outline-none ${mode === "candidate" ? "text-white border border-white" : "bg-indigo-950 text-white" }`}
                                  onClick={setModeToRecruiter}>
                                    <svg xmlns="http://www.w3.org/2000/svg" className="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth="2">
                                        <path strokeLinecap="round" strokeLinejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>

                                    <span className="mx-2">
                                        enterprise
                                    </span>
                                </button>

                                <button className={`flex justify-center w-full px-6 py-3 rounded-md md:w-auto md:mx-2 focus:outline-none ${mode === "candidate" ? "bg-white text-indigo-950" : "text-indigo-950 border border-indigo-950"}`}
                                onClick={setModeToCandidate}>
                                    <svg xmlns="http://www.w3.org/2000/svg" className="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth="2">
                                        <path strokeLinecap="round" strokeLinejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>

                                    <span className="mx-2">
                                        candidate
                                    </span>
                                </button>
                            </div>
                        </div>

                        <form className="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2">
                            <div>
                                <label className={`${mode === "candidate" ? "text-white" : "text-indigo-950"} block mb-2 text-sm`}>
                                    {mode === "candidate" ? "First Name" : "Enterprise Name"}
                                </label>
                                <input type="text" placeholder={mode === "candidate" ? "John" : "Dunder Mifflin Inc."} className="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div>
                                <label className={`${mode === "candidate" ? "text-white" : "text-indigo-950"} block mb-2 text-sm`}>
                                {mode === "candidate" ? "Last Name" : "Enterprise Field"}
                                </label>
                                <input type="text" placeholder={mode === "candidate" ? "Snow" : "Paper sales"} className="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div>
                                <label className={`${mode === "candidate" ? "text-white" : "text-indigo-950"} block mb-2 text-sm`}>
                                {mode === "candidate" ? "Phone number" : "Date of creation"}
                                </label>
                                <input type="text" placeholder={mode === "candidate" ? "0680010598" : "1990-07-23"} className="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div>
                                <label className={`${mode === "candidate" ? "text-white" : "text-indigo-950"} block mb-2 text-sm`}>Email address</label>
                                <input type="email" placeholder="johnsnow@example.com" className="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div>
                                <label className={`${mode === "candidate" ? "text-white" : "text-indigo-950"} block mb-2 text-sm`}>Password</label>
                                <input type="password" placeholder="Enter your password" className="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div>
                                <label className={`${mode === "candidate" ? "text-white" : "text-indigo-950"} block mb-2 text-sm`}>Confirm password</label>
                                <input type="password" placeholder="Enter your password" className="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <button
                                className={`flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide capitalize transition-colors duration-300 transform rounded-md ${mode === "candidate" ? 'bg-white text-indigo-950 hover:bg-slate-200 focus:outline-none focus:ring focus:ring-white focus:ring-opacity-50' : 'bg-indigo-950 text-white hover:bg-indigo-800 focus:outline-none focus:ring focus:ring-white focus:ring-opacity-50'}`}>
                                <span>Sign Up </span>

                                <svg xmlns="http://www.w3.org/2000/svg" className="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                                    <path fillRule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clipRule="evenodd" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
    </main>
    )
}