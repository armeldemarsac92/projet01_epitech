import { SearchProvider } from "./context/SearchContext";
import Navbar from "./components/Navbar";
import Footer from "./components/Footer";

function Layout({ children }) {
  return (
    <html lang="en">
      <head>
        <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
      </head>
      <body>
        <SearchProvider>
          <Navbar/>
          {children}
          <Footer />
        </SearchProvider>
      </body>
    </html>
  );
}

export default Layout;
