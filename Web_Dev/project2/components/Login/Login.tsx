import { useState } from 'react';

import s from './Login.module.scss';

import Button from '../Button/Button';

const Login: React.FC = () => {
	const [ email, setEmail ] = useState('');
	const [ password, setPassword ] = useState('');

	return (
		<section className={s.login}>
			<div className="container flex-col">
				<div className={s.imgContainer}>
					<img src="/images/CDY_Logo.png" alt="logo" />
				</div>
				<h2 className={s.heading}>Welcome Back</h2>
				<form className={s.form}>
					<input
						type="text"
						placeholder="Email"
						value={email}
						onChange={(e) => setEmail(e.target.value)}
					/>
					<input
						type="text"
						placeholder="Password"
						value={password}
						onChange={(e) => setPassword(e.target.value)}
					/>
					<div className={s.btnContainer}>
						<Button type="submit" text="Login" variant="primary" />
					</div>
				</form>
			</div>
		</section>
	);
};

export default Login;
