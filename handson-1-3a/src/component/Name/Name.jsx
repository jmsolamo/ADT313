import './Name.css';

function Name({fname,lname}){
    return(
        <div>
            <h1> <span className='txtfName'>{fname}</span> <span className='txtlName'>{lname}</span> </h1>
        </div>
    )
}

export default Name;