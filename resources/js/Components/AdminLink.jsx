import React from 'react'
import { Link } from '@inertiajs/react'
import '@fortawesome/fontawesome-free/css/all.min.css'


const AdminLink = ({url = '', active = false, icon, label}) => {
  return (
    <Link href={url} className={active == true? 'flex items-center gap-[20px] h-[40px] before:w-2 before:h-full before:bg-[#7380EC] text-[#7380EC] bg-[#DCE1EB]' : 'flex items-center ml-[1.5rem] gap-[20px] my-[6.5px] text-[#677483] hover:ml-[27px]'}>
        <i className={icon}></i>
        <h3 className={active == true? 'text-[#7380EC] text-[18px] font-semibold' : 'text-[#677483] text-[18px] font-semibold'}>{label}</h3>
    </Link>
  )
}

export default AdminLink
