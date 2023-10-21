"use client";
import "../styles/global.css";
import Navbar from "../components/Navbar";

export default function candidateProfil() {
  return (
    <main>
      <div>
        <Navbar />
      </div>
      <div className="flex flex-col">
        <div className="bg-gradient-candidate w-full h-3/5"></div>
      </div>
    </main>
  );
}
