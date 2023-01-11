import LoaderMenu from "./Loader";
export default function ImageGallary(props) {
  return (
    <>
      <div className="col-5 col-xl-3 col-md-4 mx-md-1 mx-0">
        <a href={props.url} target={"_blank"} rel="noopener noreferrer">
        <LoaderMenu width={"100%"} height={"100%"}>
            <img
              src={props.url}
              alt={props.alt}
              title={props.alt}
              className={`img-fluid rounded m-2 imageSelect ${props.class}`}
            />
          </LoaderMenu>
        </a>
      </div>
    </>
  );
}
