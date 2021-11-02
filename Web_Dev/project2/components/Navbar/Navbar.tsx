import { useState } from 'react';
import Link from 'next/link';
import { RiMenu4Line, RiCloseLine, RiShoppingCartFill } from 'react-icons/ri';

import s from './Navbar.module.scss';

import Button from '../Button/Button';

const Navbar: React.FC = () => {
	const [ open, setOpen ] = useState(false);

	return (
		<nav className={`${s.navbar}`}>
			<div className="container flex-row">
				<div className={s.logo}>
					<Link href="/">
						<a>
							<p>CDY</p>
						</a>
					</Link>
				</div>
				<ul className={s.group}>
					<li>
						<Link href="/">
							<a>About</a>
						</Link>
					</li>
					<li>
						<Link href="/products">
							<a>Products</a>
						</Link>
					</li>
					<li>
						<Link href="/delivery">
							<a>Delivery</a>
						</Link>
					</li>
				</ul>
				<ul className={s.group}>
					<li>
						<Link href="/login">
							<a>Login</a>
						</Link>
					</li>
					<li>
						<Link href="/">
							<a className={s.btnContainer}>
								<Button text="Sign up" variant="primary" />
							</a>
						</Link>
					</li>
					<li>
						<Link href="/cart">
							<a className={s.cart}>
								<RiShoppingCartFill />
							</a>
						</Link>
					</li>
				</ul>
				<div
					className={`${s.navButtonContainer} ${open ? s.open : ''}`}
					onClick={() => setOpen(!open)}
				>
					{open ? <RiCloseLine /> : <RiMenu4Line />}
				</div>
			</div>
		</nav>
	);
};

export default Navbar;
