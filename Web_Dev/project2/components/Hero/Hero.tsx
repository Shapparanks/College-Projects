import Link from 'next/link';
import s from './Hero.module.scss';

import Button from '../Button/Button';

const Hero = () => {
	return (
		<header className={s.hero}>
			<div className={`container ${s.flex}`}>
				<div className={s.content}>
					<h1>Convenience Delivered To You</h1>
					<p>
						CDY is a same-day delivery platform that connects people to their
						favorite grocery stores, shops, and restaurants. All from the comfort of
						their home.
					</p>
					<Link href="/">
						<a className={s.buttonContainer}>
							<Button text="Get Started" variant="primary" />
						</a>
					</Link>
				</div>
				<div className={s.imgContainer}>
					<img src="/images/Home-Hero-Image.svg" alt="women shopping" />
				</div>
			</div>
		</header>
	);
};

export default Hero;
