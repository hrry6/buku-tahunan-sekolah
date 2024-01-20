import React from 'react'
import { Head, Link } from '@inertiajs/react'
import '@fortawesome/fontawesome-free/css/all.min.css'
import AdminLink from '@/Components/AdminLink'
import CountBox from '@/Components/CountBox'

const DashboardSuperAdmin = ({jumlahSekolah, jumlahEkstraKurikuler, jumlahSeragam, jumlahFasilitas, jumlahKaryawanSekolah, jumlahJurusan, jumlahKelas, jumlahCircle, jumlahSiswa, jumlahGallery, jumlahKomentar}) => {
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

          <main className='w-full'>
            <div className="flex justify-between items-center mb-[15px]">
              <h2 className='text-[24px] font-bold text-[#363949]'>Dashboard</h2>
              <Link className='bg-[#FF7784] flex justify-center items-center gap-[18px] rounded-[10px] text-[#F6F6F9] px-[18px] py-[7px] mb-15'>
                <i className="fa-solid fa-right-from-bracket text-[19px]"></i>
                <p className='text-[15px] font-medium'>Logout</p>
              </Link>
            </div>
            {/* Isi */}
            <div>
              <div className="flex flex-row items-center gap-5">
                <button className='bg-white py-[9px] pr-[9px] pl-[19px] w-[290px] shadow-button flex justify-between items-center rounded-full'>
                  <h3 className='font-semibold text-[18px] text-[#363949]'>Pilih Sekolah</h3>
                  <div className='w-[33px] h-[33px] flex justify-center items-center bg-[#7380EC] rounded-full'>
                    <i className="fa-solid fa-angle-down text-white text-[28px]"></i>
                  </div>
                </button>
                <h3 className='font-semibold text-[18px] text-[#363949]'>Total Sekolah : {jumlahSekolah}</h3>
              </div>

              <div className="mt-[21px] grid grid-cols-4 gap-y-[21px] justify-end">
                <CountBox
                  icon={"fa-solid fa-school"}
                  judul={"Ekstra Kurikuler"}
                  jumlah={jumlahEkstraKurikuler}
                />
                <CountBox
                  icon={"fa-solid fa-school"}
                  judul={"Seragam"}
                  jumlah={jumlahSeragam}
                />
                <CountBox
                  icon={"fa-solid fa-school"}
                  judul={"Fasilitas"}
                  jumlah={jumlahFasilitas}
                />
                <CountBox
                  icon={"fa-solid fa-school"}
                  judul={"Karyawan Sekolah"}
                  jumlah={jumlahKaryawanSekolah}
                />
                <CountBox
                  icon={"fa-solid fa-school"}
                  judul={"Jurusan"}
                  jumlah={jumlahJurusan}
                />
                <CountBox
                  icon={"fa-solid fa-school"}
                  judul={"Kelas"}
                  jumlah={jumlahKelas}
                />
                <CountBox
                  icon={"fa-solid fa-school"}
                  judul={"Circle"}
                  jumlah={jumlahCircle}
                />
                <CountBox
                  icon={"fa-solid fa-school"}
                  judul={"Siswa"}
                  jumlah={jumlahSiswa}
                />
                <CountBox
                  icon={"fa-solid fa-school"}
                  judul={"Gallery"}
                  jumlah={jumlahGallery}
                />
                <CountBox
                  icon={"fa-solid fa-school"}
                  judul={"Komentar"}
                  jumlah={jumlahKomentar}
                />
              </div>
            </div>
            {/* End Isi */}
          </main>
        </div>
    </div>
  )
}

export default DashboardSuperAdmin