import React, { useState } from 'react';

export default function CustomSwitch({ onToggle, isChecked }) {
    return (
        <div
            className={`relative inline-block w-36 h-8 cursor-pointer rounded-full ${isChecked ? 'bg-yellow-400' : 'bg-indigo-950'} transition-colors`}
            onClick={onToggle}
        >
            <span
                className={`absolute inset-y-1 left-10 w-1/2 text-center font-semibold text-white ${isChecked ? 'opacity-0' : 'opacity-100'}`}
            >
                Candidate
            </span>
            <span
                className={`absolute inset-y-1 left-8 right-13 w-1/2 text-center font-semibold text-indigo-950 ${isChecked ? 'opacity-100' : 'opacity-0'}`}
            >
                Recruiter
            </span>
            <span
                className={`absolute top-1 left-1 inline-block w-6 h-6 bg-white rounded-full shadow-md transform ${isChecked ? 'translate-x-28 border-yellow-400' : 'border-indigo-950'}`}
            ></span>
        </div>
    );
}

