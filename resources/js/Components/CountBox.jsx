import React from 'react'

const CountBox = ({ icon, judul, jumlah}) => {
  return (
    <div className='w-[205px] h-[173px] p-4 bg-white rounded-[25px] font-bold text-[#363949] shadow-button'>
        <div className='w-[33px] h-[33px] flex justify-center items-center bg-[#7380EC] rounded-full text-white text-[18px]'>
            <i className={icon}></i>
        </div>
        <h3 className='mt-[7px] text-[18px]'>Jumlah Total <br/>{judul}</h3>
        <div className="flex justify-center items-center">
            <h2 className='mt-[9px] text-[30px]'>{jumlah}</h2>
        </div>
    </div>
  )
}

export default CountBox