"use client";
import { useEffect, useState } from "react";
import { useRouter } from "next/navigation";
import "../../styles/global.css";
import axios from "axios";
import Cookies from 'js-cookie';
import Modal from 'react-modal';


export default function AdminDashBoard() {
  const [tables, setTables] = useState([]);
  const [table, setTable] = useState([]);
  const [asideOpen, setAsideOpen] = useState(true);
  const token = Cookies.get('token');
  const router = useRouter();
  const [isModalOpen, setIsModalOpen] = useState(false);
  const [editingRow, setEditingRow] = useState(null);


  useEffect(() => {
    {() => loadTable(tableName.name)}
    
  }, [table]);

  useEffect(() => {
    const fetchTablesUrl = "https://localhost:8000/api/admin/get/database_tables";
    axios({
      method: 'get',
      url: fetchTablesUrl,
      headers: {
          'Authorization': `Bearer ${token}`,
          'Content-Type': 'application/json',
      }
    })
      .then((reponse) => {
        setTables(reponse.data);
      })
      .catch((error) => {
        if (error.response.status === 401 || error.response.status === 403) {
          router.push('/login')
        }
        console.error("Error fetching data", error);
      });
  }, []);

  const loadTable = (tableName) => {
    const fetchTableUrl = "https://localhost:8000/api/admin/get/table_rows";
    axios({
      method: 'get',
      url: fetchTableUrl,
      params: {tableName: tableName},
      headers: {
          'Authorization': `Bearer ${token}`,
          'Content-Type': 'application/json',
      }
    })
      .then((response) => {
        setTable(response.data);
        console.log(response.data);
      })
      .catch((error) => {
        console.error("Error fetching data", error);
      });
    
  };

  const openEditForm = (row) => {
    setEditingRow(row);
    setIsModalOpen(true);
  };

  const closeModal = () => {
    setIsModalOpen(false);
    setEditingRow(null);  // Reset editingRow when modal is closed
  };

  const handleInputChange = (e, key) => {
    const updatedRow = {
      ...editingRow,
      [key]: e.target.value,
    };
    setEditingRow(updatedRow);
  };

  const submitEdit = () => {

    axios({
      method: 'post',  // or 'put'
      url: 'https://localhost:8000/api/admin/edit/row',
      data: {
        'table' : Object.keys(table)[0],
        'row' : editingRow,
      },
      headers: {
        'Authorization': `Bearer ${token}`,
        'Content-Type': 'application/json',
      }
    })
    
      .then((response) => {

        setTable(response.data);
        
        setIsModalOpen(false); 
      })
      .catch((error) => {
        console.error("Error updating data", error);
      });
  };

  const deleteRow = ($tableName, $rowId) => {
    axios({
      method: 'post',  // or 'put'
      url: 'https://localhost:8000/api/admin/delete/row',
      data: {
        'table' : $tableName,
        'id' : $rowId,
      },
      headers: {
        'Authorization': `Bearer ${token}`,
        'Content-Type': 'application/json',
      }
    })
    
      .then((response) => {

        setTable(response.data);
        
        setIsModalOpen(false); 
      })
      .catch((error) => {
        console.error("Error updating data", error);
      });
  }



  const displayTable = (table) => {
    console.log("rendering table")
    const nestedArray = Object.values(table)[0];
    if (!table || table.length === 0) return null;
  
    return (
      <div className={`h-full w-full rounded-lg border border-gray-200 shadow-md`}>
        <table className="table-auto w-full border-collapse bg-white text-left text-sm text-gray-500 border-gray-200 rounded-lg">
          <thead className="bg-gray-50">
            <tr>
              {Object.keys(nestedArray[0]).map((header) => (
                <th key={header} scope="col" className="px-6 py-4 font-medium text-gray-900">
                  {header}
                </th>
              ))}
              <th scope="col" className="px-6 py-4 font-medium text-gray-900">Actions</th>
            </tr>
          </thead>
          <tbody className="divide-y divide-gray-100 border-t border-gray-100">
            {nestedArray.map((row, rowIndex) => (
              <tr key={rowIndex} className="hover:bg-gray-50">
                {Object.values(row).map((cell, cellIndex) => (
                  <td key={cellIndex} className="px-6 py-4">
                    {cell}
                  </td>
                ))}
                <td className="px-6 py-4">
                  <div className="flex justify-end gap-4">
                    <a x-data="{ tooltip: 'Delete' }" href="#">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        strokeWidth="1.5"
                        stroke="currentColor"
                        className="h-6 w-6"
                        x-tooltip="tooltip"
                        onClick={() => deleteRow(Object.keys(table)[0], rowIndex)}
                      >
                        <path
                          strokeLinecap="round"
                          strokeLinejoin="round"
                          d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                        />
                      </svg>
                    </a>
                    <a x-data="{ tooltip: 'Edit' }" href="#">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        strokeWidth="1.5"
                        stroke="currentColor"
                        className="h-6 w-6"
                        onClick={() => openEditForm(row)}
                      >
                        <path
                          strokeLinecap="round"
                          strokeLinejoin="round"
                          d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                        />
                      </svg>
                    </a>
                  </div>
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    );
  }

  return (
<main className="h-screen w-full bg-gray-100 text-gray-700 z-0 pb-20 mb-20">
      <header className="flex w-full items-center justify-between border-b-2 border-gray-200 bg-white p-2">
        <div className="flex items-center space-x-2">
          <button className="text-3xl" onClick={() => setAsideOpen(!asideOpen)}>
            <i className="bx bx-menu"></i>
          </button>
          <div><img className="w-auto h-12" src="/logo.svg" alt="Logo" /></div>
        </div>
      </header>

       <Modal
        isOpen={isModalOpen}
        onRequestClose={closeModal}
        contentLabel="Edit Row"
        style={{
          overlay: {
            backgroundColor: 'rgba(0, 0, 0, 0.75)'
          },
          content: {
            color: 'lightsteelblue',
            width: '70%',
            height: '70%',
            margin: 'auto'
          }
        }}
      >
        {editingRow && (
          <>
            {Object.keys(editingRow).map(key => (
              <div className="flex flex-row flex-wrap" key={key}>
                <label className="block text-gray-600 p-1 text-sm w-full md:w-1/4" htmlFor={key}>{key}</label>
                <input
                  id={key}
                  type="text"
                  value={editingRow[key]}
                  onChange={(e) => handleInputChange(e, key)}
                  className="block w-1/3 md:w-3/4 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                  disabled={key === 'id'}  // Disable the input field if the key is 'id'
                />
              </div>
            ))}
            <button className='m-5 flex items-center justify-between w-fit px-6 py-3 text-sm tracking-wide capitalize transition-colors duration-300 transform rounded-md bg-indigo-950 text-white hover:bg-indigo-800 focus:outline-none focus:ring focus:ring-white focus:ring-opacity-50'
                onClick={submitEdit}> Save</button>
            <button className='m-5 flex items-center justify-between w-fit px-6 py-3 text-sm tracking-wide capitalize transition-colors duration-300 transform rounded-md bg-indigo-950 text-white hover:bg-indigo-800 focus:outline-none focus:ring focus:ring-white focus:ring-opacity-50'
                onClick={closeModal}>Cancel</button>
          </>
        )}

      </Modal>

      

      <div className="flex h-s{() => loadTable(tableName.name)}creen ">
        <aside className={`h-screen overflow-y-scroll flex w-72 flex-col space-y-2 border-r-2 border-gray-200 bg-white p-2 ${asideOpen ? '' : 'hidden'}`}>
          {tables.map((tableName) => (
            <a
              key={tableName.name}
              href="#"
              onClick={() => loadTable(tableName.name)}
              className="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600"
            >
              <span className="text-2xl">
                <i className="bx bx-table"></i>
              </span>
              <span>{tableName.name}</span>
            </a>
          ))}
        </aside>

        <div className="bg-gray-200 w-full h-screen overflow-x-scroll overflow-y-scroll flex justify-center items-start p-10 pb-20">
        {displayTable(table)}
        </div>
      </div>

    </main>
  );
}

