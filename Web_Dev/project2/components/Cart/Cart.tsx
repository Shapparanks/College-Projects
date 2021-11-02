import s from './Cart.module.scss';

import Link from 'next/link';

const Cart: React.FC = () => {
	return (
		<div className={s.cart}>
			<div className="container flex-col">
				<div className={s.headings}>
					<p>Product</p>
					<p>Description</p>
					<p>Quantity</p>
					<p>Price</p>
					<p>Remove</p>
				</div>

				<div className={s.product}>
					<p>Grapes</p>
					<p>Bag of Grapes</p>
					<p>1</p>
					<p>$2</p>
					<p>X</p>
				</div>

				<div className={s.product}>
					<p>Ground Beef</p>
					<p>90% Lean Beef</p>
					<p>3</p>
					<p>$21</p>
					<p>X</p>
				</div>

				<div className={s.product}>
					<p>Shampoo</p>
					<p>shampoo for curls</p>
					<p>2</p>
					<p>$6</p>
					<p>X</p>
				</div>

				<div className={s.checkout}>
					<p>Total: $29</p>
					<Link href="/delivery">
						<a>Continue to Delivery Details {'->'}</a>
					</Link>
				</div>
			</div>
		</div>
	);
};

export default Cart;
