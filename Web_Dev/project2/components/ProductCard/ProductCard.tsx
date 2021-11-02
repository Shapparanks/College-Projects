import s from './ProductCard.module.scss';

import Button from '../Button/Button';

interface ProductCardProps {
	name: string;
	price: number;
	store: string;
	imgUrl: string;
}

const ProductCard: React.FC<ProductCardProps> = ({ name, price, store, imgUrl }) => {
	return (
		<article className={s.productCard}>
			<div className={s.imgContainer}>
				<img src={imgUrl} />
			</div>
			<div className={s.detail}>
				<h3>{name}</h3>
				<p>Store: {store}</p>
				<p>Price: ${price}</p>
			</div>
			<div className={s.btnContainer}>
				<Button text="Add to Cart" variant="primary" />
			</div>
		</article>
	);
};

export default ProductCard;
