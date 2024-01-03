import React from 'react'
import { Head, Link } from '@inertiajs/react'

const DashboardAdminSekolah = () => {
  return (
    <>
        <Head title="Dashboard Admin Sekolah" />
        <div>DashboardAdminSekolah</div>
        <Link
        href={route('logout')}
        >
            Logout
        </Link>
    </>
  )
}

export default DashboardAdminSekolah