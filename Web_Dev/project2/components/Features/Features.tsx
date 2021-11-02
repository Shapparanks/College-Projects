import s from './Features.module.scss';

const Features: React.FC = () => {
	return (
		<section className={s.features}>
			<div className={`container ${s.flex}`}>
				<h3 className={s.heading}>
					Our Drivers are committed to delivering the best service.
				</h3>
				<div className={s.videoContainer}>
					<video src="/videos/checking-groceries.mp4" autoPlay controls loop muted />
				</div>
			</div>
		</section>
	);
};

export default Features;
