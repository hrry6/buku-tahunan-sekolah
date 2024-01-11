import React from 'react'
import { Head, Link } from '@inertiajs/react'
import '@fortawesome/fontawesome-free/css/all.min.css'
import AdminLink from '@/Components/AdminLink'

const DashboardSuperAdmin = () => {
  return (
    <div className='bg-[#F6F6F9]'>
        <Head title='Dashboard Super Admin' />
        <div className="flex gap-[74px] w-[96%] mx-auto pt-5 my-0">
          <aside className='h-screen w-[300px]'>
            <div className="flex items-center justify-between">
              <h2 className='text-[24px] text-[#363949] font-bold'>SUPER ADMIN <span className='text-[#65A673]'>BTS</span></h2>
              <div className="pr-1 block md:hidden text-[#7380EC] text-[28px]">
                <i className="fa-solid fa-xmark"></i>
              </div>
            </div>

            <div className="flex flex-col bg-white shadow-basic rounded-md relative top-4 transition-all duration-[300] ease-in-out hover:shadow-none h-[84vh] overflow-hidden">
              <AdminLink
                active={true}
                icon={'fa-solid fa-chart-line'}
                label={'Dashboard'}
                />
              <AdminLink
                icon={'fa-solid fa-school'}
                label={'Data Sekolah'}
              />
              <AdminLink
                icon={'fa-solid fa-volume-low'}
                label={'Sambutan Kepsek'}
              />
              <AdminLink
                icon={'fa-solid fa-gamepad'}
                label={'Ekstra Kurikuler'}
              />
              <AdminLink
                icon={'fa-solid fa-graduation-cap'}
                label={'Seragam'}
              />
              <AdminLink
                icon={'fa-solid fa-house-laptop'}
                label={'Fasilitas'}
              />
              <AdminLink
                icon={'fa-solid fa-chalkboard-user'}
                label={'Karyawan Sekolah'}
              />
              <AdminLink
                icon={'fa-solid fa-users-gear'}
                label={'Jurusan'}
              />
              <AdminLink
                icon={'fa-solid fa-users'}
                label={'Kelas'}
              />
              <AdminLink
                icon={'fa-solid fa-user-group'}
                label={'Circle'}
              />
              <AdminLink
                icon={'fa-solid fa-user-graduate'}
                label={'Siswa'}
              />
              <AdminLink
                icon={'fa-solid fa-camera-retro'}
                label={'Gallery'}
              />
              <AdminLink
                icon={'fa-solid fa-comments'}
                label={'Komentar'}
              />
            </div>
          </aside>

          <main className='bg-white w-full'>
            <div className="flex justify-between items-center">
              <h2 className='text-[24px] font-bold text-[#363949]'>Dashboard</h2>
              <Link className='bg-[#FF7784] flex justify-center items-center gap-[18px] rounded-[10px] text-[#F6F6F9] px-[18px] py-[7px] mb-15'>
                <i class="fa-solid fa-right-from-bracket text-[19px]"></i>
                <p className='text-[15px] font-medium'>Logout</p>
              </Link>
            </div>
          </main>
        </div>
    </div>
  )
}

export default DashboardSuperAdmin