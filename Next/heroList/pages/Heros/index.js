import styles from '../../styles/Heros.module.css'
import Link from 'next/link'

export const getStaticProps = async () => {
  const res = await fetch('https://jsonplaceholder.typicode.com/users');
  const data = await res.json();

  return {
    props: { Heros: data }
  }
}

const Heros = ({ Heros }) => {
  // console.log(Heros)

  return (
    <div>
      <h1>All Heros</h1>
      {Heros.map(Hero => (
        <Link href={'/Heros/' + Hero.id} key={Hero.id}>
          <a className={styles.single}>
            <h3>{ Hero.name }</h3>
          </a>
        </Link>
      ))}
    </div>
  );
}
 
export default Heros;