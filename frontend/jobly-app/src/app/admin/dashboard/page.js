"use client";
import { useEffect, useState } from "react";
import "../../styles/global.css";
import Axios from "axios";
import Navbar from "../../components/Navbar";

export default function AdminDashBoard() {
  const [tables, setTables] = useState([]);
  const [table, setTable] = useState([]);

  useEffect(() => {
    const fetchTablesUrl = "http://localhost:8000/api/get/database_tables";
    Axios.get(fetchTablesUrl)
      .then((reponse) => {
        setTables(reponse.data);
      })
      .catch((error) => {
        console.error("Error fetching data", error);
      });
  }, []);

  const loadTable = (tableName) => {
    const fetchTableUrl = "http://localhost:8000/api/get/table_rows";
    Axios.get(fetchTableUrl, {
      params: { tableName: tableName },
    })
      .then((response) => {
        setTable(response.data);
        console.log(response.data);
      })
      .catch((error) => {
        console.error("Error fetching data", error);
      });

    const displayTable = (table) => {
      i = 0;
      return ({table.map((line) => {
      
        if ( i === 0 ) {
          <thead class="block md:table-header-group">
            <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            {line.map((columnHeader) => {
              <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                {columnHeader}
              </th>;
            })}
            </tr>
        </thead>;
      }
      })})
        
    }
    
  };

  

  return (
    <main>
      <div className="flex flex-box">
        <div className="bg-admin w-1/3 p-10">
          <nav className="flex flex-col h-screen max-h-screen overflow-scroll border-2 border-white rounded-md p-10">
            <h1 className="text-white text-xl pt-2 pl-1">DashBoard menu</h1>
            <ul className="flex flex-col">
              {tables.map((tableName) => (
                <li
                  onClick={() => loadTable(tableName.name)}
                  className="flex flex-row border-2 border-white p-4 m-2 text-white rounded-md"
                  key={tableName.name}
                >
                  <p>{tableName.name}</p>
                  <p>{tableName.row_count}</p>
                </li>
              ))}
            </ul>
          </nav>
        </div>
        <div className="bg-gray-200 h-screen w-2/3">
            
        </div>
      </div>
    </main>
  );
}
