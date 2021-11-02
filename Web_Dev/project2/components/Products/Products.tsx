import s from './Products.module.scss';

import { data } from './data';

import ProductCard from '../ProductCard/ProductCard';

const Products = () => {
	return (
		<section className={s.products}>
			<div className="container flex-col">
				<h1 className={s.heading}>Products Available Near You</h1>
				<div className={s.listing}>
					{data.map((product) => <ProductCard key={product.name} {...product} />)}
				</div>
			</div>
		</section>
	);
};

export default Products;
