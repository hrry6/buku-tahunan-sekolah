import React from 'react'
import { Head, Link } from '@inertiajs/react'

const DashboardSuperAdmin = () => {
  return (
    <>
        <Head title='Dashboard Super Admin' />
        <div>DashboardSuperAdmin</div>
        <Link
        href={route('logout')}
        >
            Logout
        </Link>
    </>
  )
}

export default DashboardSuperAdmin