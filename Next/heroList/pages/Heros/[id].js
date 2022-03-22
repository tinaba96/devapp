export const getStaticPaths = async () => {
  const res = await fetch('https://jsonplaceholder.typicode.com/users');
  const data = await res.json();

  // map data to an array of path objects with params (id)
  const paths = data.map(Hero => {
    return {
      params: { id: Hero.id.toString() }
    }
  })

  return {
    paths,
    fallback: false
  }
}

export const getStaticProps = async (context) => {
  const id = context.params.id;
  const res = await fetch('https://jsonplaceholder.typicode.com/users/' + id);
  const data = await res.json();

  return {
    props: { Hero: data }
  }
}

const Details = ({ Hero }) => {
  return (
    <div>
      <h1>{ Hero.name }</h1>
      <p>{ Hero.email }</p>
      <p>{ Hero.website }</p>
      <p>{ Hero.address.city }</p>
    </div>
  );
}

export default Details;