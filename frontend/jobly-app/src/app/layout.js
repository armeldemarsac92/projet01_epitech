import { SearchProvider } from "./context/SearchContext";
import Header from "./components/Navbar";
import Footer from "./components/Footer";

function Layout({ children }) {
  return (
    <html lang="en">
      <head>
        {/* You can include additional <head> elements here if needed */}
      </head>
      <body>
        <SearchProvider>
          {children}
          <Footer />
        </SearchProvider>
      </body>
    </html>
  );
}

export default Layout;
