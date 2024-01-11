import { Link, Head } from '@inertiajs/react';

export default function Main() {
    return (
        <>
            <Head title="Buku Tahunan Sekolah" />

            <nav className="flex justify-between items-center p-4">
                <div className="flex items-center ">
                    <img src="../../../img/logosmk.png" className=" w-44 " alt="SMK Logo" />
                </div>
                <ul className="flex space-x-10 mr-20 mb-10">
                    <li><a href="#" className="text-[#3A2F2F] hover:text-gray-600 font-bold">Home</a></li>
                    <li><a href="#" className="text-[#3A2F2F] hover:text-gray-600 font-bold">Teachers</a></li>
                    <li><a href="#" className="text-[#3A2F2F] hover:text-gray-600 font-bold">Gallery ▾</a></li>
                    <li><a href="#" className="text-[#3A2F2F] hover:text-gray-600 font-bold">About</a></li>
                </ul>
            </nav>

            <div className="transform flex-shrink-0 w-2/6 ml-20 mt-14">
                <p className="text-black font-inter font-bold" style={{ fontSize: '63px', lineHeight: 'normal' }}>
                    SMK NEGERI 1 KOTA BEKASI
                </p>
                <button className="bg-[#8AAE92] hover:bg-blue-700 text-white font-bold w-40 py-2 px-4 mt-4 rounded-full">
                    MULAI
                </button>
            </div>

            <div>
                <h1 className="text-3xl font-bold ml-14 mt-10 border-b-2 border-black w-[570px]">REKAYASA PERANGKAT LUNAK B 2023</h1>
                <h1 className="text-3x1 font-bold ml-14 mt-10 absolute right-[100px]">RPL B</h1>
                <img 
                    src="/img/fotokelas.png"
                    alt="Foto Kelas"
                    className="block mx-auto mt-20"
                />
            </div>
        </>
    );
}
