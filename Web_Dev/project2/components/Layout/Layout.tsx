import { Fragment } from 'react';

import Navbar from '../Navbar/Navbar';
import Footer from '../Footer/Footer';

const Layout: React.FC = ({ children }) => {
	return (
		<Fragment>
			<Navbar />
			{children}
			<Footer />
		</Fragment>
	);
};

export default Layout;
