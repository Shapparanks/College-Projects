import { useState } from 'react';

import s from './Delivery.module.scss';

const Delivery: React.FC = () => {
	const [ address, setAddress ] = useState('');

	return (
		<div className={s.delivery}>
			<div className="container flex-col">
				<div className={s.search}>
					<p>Search for your address:</p>
					<input
						type="text"
						value={address}
						onChange={(e) => setAddress(e.target.value)}
					/>
				</div>

				<p className={s.todo}>
					!! Working on getting a map to appear here using Leaflet JS !! Ran into
					some bugs while trying to implement. Will be here for next project.
				</p>
			</div>
		</div>
	);
};

export default Delivery;
