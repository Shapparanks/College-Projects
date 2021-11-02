import Link from 'next/link';

import s from './Footer.module.scss';

import Facebook from '../../public/images/icon-facebook.svg';
import Twitter from '../../public/images/icon-twitter.svg';
import Pinterest from '../../public/images/icon-pinterest.svg';
import Instagram from '../../public/images/icon-instagram.svg';

import { linkGroups } from './data';

const Footer = () => {
	return (
		<footer className={s.footer}>
			<div className={`${s.flex} container`}>
				<div className={s.logo}>
					<p>CDY</p>
				</div>
				<div className={s.linkContainer}>
					{linkGroups.map((links, idx) => {
						return (
							<ul key={idx} className={s.group}>
								{links.map((link) => (
									<Link href={link.href} key={link.text}>
										<a>{link.text}</a>
									</Link>
								))}
							</ul>
						);
					})}
				</div>
				<div className={s.social}>
					<Facebook />
					<Twitter />
					<Pinterest />
					<Instagram />
				</div>
			</div>
			<p className={`${s.signature} container-l`}>
				Copyright &copy; 2021, Developed by Straight Off the Couch
			</p>
		</footer>
	);
};

export default Footer;
