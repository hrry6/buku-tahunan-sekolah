import { Link, Head } from '@inertiajs/react';

export default function Main() {
    return (
        <>
            <Head title="Main" />
            <p>Ini Main Page</p>
            <Link
                href={route('login')}
                className="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
            >
                Login
            </Link>
        </>
    );
}
