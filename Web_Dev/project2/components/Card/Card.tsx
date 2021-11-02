import s from './Card.module.scss';

interface CardProps {
	title: string;
	content: string;
	imgUrl?: string;
}

const Card: React.FC<CardProps> = ({ title, content, imgUrl }) => {
	return (
		<article className={s.card}>
			{/* <div className={s.imgContainer}>
				<img src={imgUrl} alt="brand recognition icon" />
			</div> */}
			<h4>{title}</h4>
			<p>{content}</p>
		</article>
	);
};

export default Card;
