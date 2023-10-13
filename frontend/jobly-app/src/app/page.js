import Image from 'next/image'
import Footer from './components/Footer'

export default function Home() {
  return (
    <div className="flex flex-col min-h-screen">
      <div className="flex-grow">
        {/* All your main content goes here */}
      </div>
      <Footer />
    </div>
  );
}
