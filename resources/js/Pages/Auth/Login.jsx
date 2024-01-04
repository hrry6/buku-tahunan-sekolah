import { Head, useForm } from '@inertiajs/react';

export default function Login() {
    const { data, setData, post, processing, errors, reset } = useForm({
        username: '',
        password: ''
    });

    const submit = (e) => {
        e.preventDefault();
        post(route('login'));
        reset();
    };

    return (
        <>
            <Head title="Login" />
            <section className='bg-white min-h-screen flex justify-center items-center'>
                <div className='flex w-[65%] max-w-[832px] h-[472px] max-h-[472px] rounded-tl-[50px] rounded-bl-[10px] rounded-br-[50px] overflow-hidden box-shadow-custom'>
                    <div className='w-1/2'>
                        <img src="/img/LoginImage.png" className='mt-[75px] mb-[45px] w-full h-[353px]' alt="" />
                    </div>
                    <div className='w-1/2 bg-[#7380EC] flex flex-col items-center'>
                        <form onSubmit={submit} className='mt-[130px] flex flex-col items-center'>
                            <h2 className='font-semibold text-full text-[19px] text-white '>W E L C O M E</h2>

                            <input type="text" value={data.username} onChange={e => setData('username', e.target.value)} placeholder='username' className='mt-5 w-[257px] h-[30px] rounded-full text-[13px] text-[#888888] pl-5 font-semibold focus:outline-none focus:ring-2 focus:ring-white' />
                            {errors.username && 
                            <div className="flex justify-center items-center gap-1 bg-red-200 text-red-600 font-semibold mt-2 rounded-full w-[237px] py-[1px]">
                                <svg xmlns="http://www.w3.org/2000/svg" className="stroke-current shrink-0 h-4 w-4" fill="none" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span className='text-[14px]'>{errors.username}</span>
                            </div>}
                            
                            <input type="password" value={data.password} onChange={e => setData('password', e.target.value)} placeholder='password' className='mt-[18px] w-[257px] h-[30px] rounded-full text-[13px] text-[#888888] pl-5 font-semibold focus:outline-none focus:ring-2 focus:ring-white' />
                            {errors.password && 
                            <div className="flex justify-center items-center gap-1 bg-red-200 text-red-600 font-semibold mt-2 rounded-full w-[237px] py-[1px]">
                                <svg xmlns="http://www.w3.org/2000/svg" className="stroke-current shrink-0 h-4 w-4" fill="none" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span className='text-[14px]'>{errors.password}</span>
                            </div>}
                            
                            <button type="submit" disabled={processing} className='w-[257px] h-[30px] text-[13px] hover:scale-105 text-white font-bold bg-[#14C345] mt-5 rounded-full'>
                                {processing ? 'S U B M I T T I N G...' : 'S U B M I T'}
                            
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </>
    );
}