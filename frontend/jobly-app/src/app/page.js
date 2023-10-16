'use client'
import Footer from './components/Footer'
import Search from './components/Search';
import './styles/global.css'
import { useState } from 'react';

export default function Home() {

  const [mode, setMode] = useState("candidate");

  const userStyles = mode === "candidate" ?
    'bg-gradient-candidate':
    'bg-gradient-recruiter';

  return (
    <main className={userStyles}>
      <div className='flex flex-row w-full justify-center'>
        <div className='flex flex-col w-1/2 h-screen'>
          <div className='flex flex-col h-1/3'></div>
          <div className='flex flex-col h-1/3'>
            <div className='flex flex-col h-fit flex-start items-center'>
              <h1 className='font-semibold text-3xl'>Find your dream job</h1>
            </div>
            <div className='flex flex-col h-2/3 items-center'>
              <Search></Search>
            </div>
          </div>
          <div className='flex flex-col h-1/3'></div>
        </div>
      </div>
      <Footer></Footer>
    </main>
  )
}
