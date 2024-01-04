import { useState} from 'react';
import { Head, useForm } from '@inertiajs/react';

export default function Login() {
    const { data, setData, post, processing, errors, reset } = useForm({
        username: '',
        password: ''
    });

    const [showPassword, setShowPassword] = useState(false);

    const toggleSetPassword = () => {
        setShowPassword(!showPassword);
    }

    const submit = (e) => {
        e.preventDefault();
        post(route('login'));
        reset()
    };

    return (
        <>
            <Head title="Login" />
            <section className='bg-white min-h-screen flex justify-center items-center selection:bg-white selection:text-black'>
                <div className='flex w-[65%] max-w-[832px] min-w-[275px] h-[472px] max-h-[472px] rounded-tl-[50px] rounded-bl-[10px] rounded-br-[50px] overflow-hidden box-shadow-custom'>
                    <div className='w-1/2 min-[850px]:block hidden'>
                        <img src="/img/LoginImage.png" className='mt-[75px] mb-[45px] w-full h-[353px]' alt="" />
                    </div>
                    <div className='min-[850px]:w-1/2 w-full bg-[#7380EC] flex flex-col items-center'>
                        <form onSubmit={submit} className='mt-[130px] flex flex-col items-center'>
                            <h2 className='font-semibold text-full text-[19px] text-white '>W E L C O M E</h2>
                            <input type="text" value={data.username} onChange={e => setData('username', e.target.value)} placeholder='username' className='mt-5 w-[257px] h-[30px] rounded-full text-[13px] text-[#888888] pl-5 font-semibold focus:outline-none focus:ring-2 focus:ring-white' />
                            {errors.username && 
                            <div className="flex justify-center items-center gap-1 bg-red-200 text-red-600 font-semibold mt-2 rounded-full w-[237px] py-[1px]">
                                <svg xmlns="http://www.w3.org/2000/svg" className="stroke-current shrink-0 h-4 w-4" fill="none" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span className='text-[14px]'>{errors.username}</span>
                            </div>}
                            <div className="relative">
                                <input type={showPassword == false? 'password' : 'text'} value={data.password} onChange={e => setData('password', e.target.value)} placeholder='password' className='mt-[18px] w-[257px] h-[30px] rounded-full text-[13px] text-[#888888] pl-5 font-semibold focus:outline-none focus:ring-2 focus:ring-white' />
                                {showPassword == false? 
                                                                
                                <svg onClick={toggleSetPassword} xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#888888" className="bi bi-eye-slash absolute top-1/2 right-[10px]" viewBox="0 0 16 16">
                                    <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"/>
                                    <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"/>
                                    <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z"/>
                                </svg>
                                :
                                <svg onClick={toggleSetPassword} xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#888888" className="bi bi-eye absolute top-1/2 right-[10px]" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                </svg>
                                }
                            </div>
                            
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