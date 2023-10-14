import Image from 'next/image'
import Footer from './components/Footer'

export default function Home() {
  return (
    <main className='flex flex-row w-full justify-center'>
      <div className='flex flex-col w-1/2 h-screen'>
        <div className='flex flex-col h-1/3'></div>
        <div className='flex flex-col h-1/3 flex-start items-center'>
          <h1 className='font-semibold text-3xl'>Find your dream job</h1>
        </div>
        <div className='flex flex-col h-1/3'></div>
      </div>
    </main>
  )
}
