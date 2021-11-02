import { Fragment } from 'react';
import s from './Services.module.scss';

import { cardData } from './data';

import Card from '../Card/Card';

const Services = () => {
	return (
		<div className={s.services}>
			<div className="container flex-col">
				{/* <h1 className={s.heading}>Services</h1> */}
				<div className={s.cardContainer}>
					{cardData.map((card, idx) => {
						if (idx === cardData.length - 1) {
							return <Card key={card.title} {...card} />;
						}
						return (
							<Fragment key={card.title}>
								<Card {...card} />
								<div className={s.divider} />
							</Fragment>
						);
					})}
				</div>
			</div>
		</div>
	);
};

export default Services;
